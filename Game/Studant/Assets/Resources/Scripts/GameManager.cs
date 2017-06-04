using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;
using UnityEngine.UI;

public class GameManager : MonoBehaviour
{

  //public GameObjects and other shizzle
  #region

  //Lives
  private int lives = 3;
  public GameObject life1, life2, life3;

  //Score
  private int diamonds, bonus;
  public Text score;

  //GameOverUI
  public GameObject gameOverMenu, audioOnBtnGO, audioOffBtnGO;

  //PauseUI
  public GameObject audioOnBtnP, audioOffBtnP, pauseMenu;

  //Checkpoints
  public GameObject currCheckpoint;
  private Movement mov;

  //Pop-Ups
  public GameObject youdiedScreen, triviaCorrScreen, triviaWrongScreen;

  //TriviaUI
  public GameObject triviaMenu;
  public Text triviaQuestion, triviaAnswer1, triviaAnswer2, triviaAnswer3, triviaAnswer4;

  //EndScreen
  public GameObject endScreen;
  public Text endScore;

  //Select Character
  public GameObject[] characters;
  public Vector3 spawnPos;
  public GameObject characterSelectPanel;
  public GameObject mascotBlock;
  //private CollectibleManager colMan;
	private bool allCollected;

  //Trivia 
  private List<string> questions = new List<string>()
  {
    "Over welke tijdspanne werd de kathedraal gebouwd?",                                                                  //196 jaar
    "Door welk object komen er massaal veel Japanners op Antwerpen af?",                                                  //Een bekend verhaal
    "Wat is een bijnaam van stad Antwerpen?",                                                                             //Koekenstad
    "Hoe heette de Vlaamse tv-serie waarin een hele wijk van Antwerpen werd afgesloten?",                                 //Cordon
    "In welk museum kan je 's avonds deelnemen aan yoga sessies?",                                                        //MHKA
    "Waar in Antwerpen kan je je in een andere tijd wanen?",                                                              //Vlaaikensgang
    "Hoe heten de voormalige grachten en riolen van Antwerpen?",                                                          //De Ruien
    "Welk dier had de Antwerpse Zoo, voordat andere dierentuinen er eentje hadden?",                                      //Okapi
    "Welke lekkernij is typisch Antwerps?",                                                                               //Antwerpse Handjes
    "Dankzij Welk project van Gate15 kan je blokken op de coolste locaties?",                                             //Study360
    "Waar kijken alle studenten naar uit op het einde van de zomer?",                                                     //Studay
    "Waar komen de studenten tussen het studeren graag samen wanneer er goed weer is?"                                    //Het Vlot 
  };

  private string[,] answers = new string[12, 4]
  {
    { "98 jaar", "347 jaar", "169 jaar", "206 jaar"},                                                                       //Kathedraal
    {"Een bekend verhaal", "Het lekkere eten", "Het warme weer", "Mooie architectuur"},                                     //Hond van Vlaanderen
    {"Havenstad", "Koekenstad", "Culturenstad", "Chocoladestad"},                                                           //Koekendoos
    {"Quarantaine", "Buffer", "Cordon", "Gescheiden" },                                                                     //Container
    {"Museum aan de Stroom", "Museum van Hedendaagse Kunst Antwerpen", "Nationaal Scheepsvaartmuseum","Rubenshuis"},        //Yoga matje
    {"Suikerrui", "Oude Koornmarkt", "Vlaaikensgang", "Pelgrimstraat"},                                                     //Bord Vlaaikensgang
    {"De Ruien", "De Spuien", "De Vesten", "De Vaarwateren"},                                                               //Zaklamp
    {"Kleine Panda", "Amoerluipaard", "Komodo Varaan", "Okapi"},                                                            //Okapi
    {"Ijzerkoekje", "Spekdik", "Kniepertje", "Handje"},                                                                     //Antwerpse Want
    {"BuitenBlokken", "Study360", "Den Blok", "WhereverYouWant"},                                                           //Geodriehoek?
    {"Studay", "Nieuwe schoolboeken", "Sinterklaas", "Nieuwe inzichten"},                                                   //Fuifpolsbandje? Gitaar?
    {"De Zoo", "De Boerentoren", "Het Stadspark", "Het Vlot" }                                                              //Een vlot?                           
  };

  int correctAnswer;

  //Timer
  public Text time;
  private string secondpart = "00";
  private string minutepart = "00";
  private float seconds, minutes;
  private int timeCount;

  //Other UI elements
  public GameObject player, gameUI;

  private bool isPaused;
  public Collider2D floorCollider;

  public Movement m;
  public CameraControl cc;

  public bool screenIsNotActive;

  #endregion 

  void Start()
  {
    //colMan = GameObject.Find("CollectibleManager").GetComponent<CollectibleManager>();
    //m = GameObject.FindGameObjectWithTag("Player").GetComponent<Movement>();
    diamonds = 0;
    isPaused = false;
    screenIsNotActive = true;
	allCollected = PlayerPrefsX.GetBool("allIsCollected");
	
  }

  void Update()
  {
    player = GameObject.FindGameObjectWithTag("Player");

    //if you died and one clicks open trivia 
    if (youdiedScreen.activeSelf && Input.anyKey)
    {
      ToggleYouDied();
    }

    //if trivia was correct and you click continue game
    if (triviaCorrScreen.activeSelf && Input.anyKey)
    {
      ToggleTriviaCorr();
    }

    //if trivia was wrong and you click show gameover
    if (triviaWrongScreen.activeSelf && Input.anyKey)
    {
      ToggleTriviaWrong();
    }

    //pause timer upon end
    if (endScreen.activeSelf == false)
    {
      UpdateTimerUI();
      SetScore();
    }
    if (allCollected)
    {
      mascotBlock.SetActive(false);
    }
  }

  public void SetTimeScale(float time)
  {
    Time.timeScale = time;
    if (time == 0)
    {
      gameUI.SetActive(false);
      isPaused = true;
    }
    else
    {
      gameUI.SetActive(true);
      isPaused = false;
    }
  }

  //public void ToggleTimeScale()
  //{
  //  if (isPaused)
  //  {
  //    gameUI.SetActive(true);
  //    Time.timeScale = 1;
  //    isPaused = false;
  //    Debug.Log("NO PAUSE");

  //  }
  //  else
  //  {
  //    gameUI.SetActive(false);
  //    Time.timeScale = 0;
  //    isPaused = true;
  //    Debug.Log("YES PAUSE");
  //  }
  //}

  //Trivia

  void Trivia()
  {
    int pos = Random.Range(0, 11);
    triviaQuestion.text = questions[pos];
    triviaAnswer1.text = answers[pos, 0];
    triviaAnswer2.text = answers[pos, 1];
    triviaAnswer3.text = answers[pos, 2];
    triviaAnswer4.text = answers[pos, 3];

    switch (pos)
    {
      case 0: correctAnswer = 3; break;
      case 1: correctAnswer = 1; break;
      case 2: correctAnswer = 2; break;
      case 3: correctAnswer = 3; break;
      case 4: correctAnswer = 2; break;
      case 5: correctAnswer = 3; break;
      case 6: correctAnswer = 1; break;
      case 7: correctAnswer = 4; break;
      case 8: correctAnswer = 4; break;
      case 9: correctAnswer = 2; break;
      case 10: correctAnswer = 1; break;
      case 11: correctAnswer = 4; break;
    }
  }

  public void Button1()
  {
    CheckAnswer(1);
  }

  public void Button2()
  {
    CheckAnswer(2);
  }

  public void Button3()
  {
    CheckAnswer(3);
  }

  public void Button4()
  {
    CheckAnswer(4);
  }

  public void CheckAnswer(int button)
  {
    if (correctAnswer == button)
    {
      ToggleTriviaCorr();
    }
    else
    {
      ToggleTriviaWrong();
    }
  }

  public void TriviaToggle()
  {
    if (lives > 0)
    {
      triviaMenu.SetActive(true);
      Trivia();
    }
    else
    {
      Debug.Log("You ran out of lives :/");
      GameOverToggle();
      HideTrivia();
    }

  }

  public void HideTrivia()
  {
    triviaMenu.SetActive(false);
  }

  public void GameOverToggle()
  {
    triviaWrongScreen.SetActive(false);

    if (gameOverMenu.activeSelf)
    {
      gameOverMenu.SetActive(false);
    }
    else
    {
      gameOverMenu.SetActive(true);
      triviaMenu.SetActive(false);
    }
  }

  //Pause Game

  public void PauseToggle()
  {
    if (pauseMenu.activeSelf)
    {
      pauseMenu.SetActive(false);
      SetTimeScale(1);
    }
    else
    {
      pauseMenu.SetActive(true);
      SetTimeScale(0);
    }
  }

  //GoToMenu

  public void MainMenu()
  {
    if (Time.timeScale == 0)
    {
      SetTimeScale(1);
    }
    SceneManager.LoadScene("Main Menu");
  }

  //Restart level

  public void RestartLevel()
  {
    Application.LoadLevel(Application.loadedLevel);
    SetTimeScale(1);
  }

  //Audio

  public void AudioOn()
  {
    if (gameOverMenu.activeSelf)
    {
      audioOnBtnGO.SetActive(true);
      audioOffBtnGO.SetActive(false);
    }
    else
    {
      audioOnBtnP.SetActive(true);
      audioOffBtnP.SetActive(false);
    }
    AudioListener.volume = 1;

  }

  public void AudioOff()
  {
    if (gameOverMenu.activeSelf)
    {
      audioOnBtnGO.SetActive(false);
      audioOffBtnGO.SetActive(true);
    }
    else
    {
      audioOnBtnP.SetActive(false);
      audioOffBtnP.SetActive(true);
    }
    AudioListener.volume = 0;
  }

  //Timer

  public void UpdateTimerUI()
  {
    seconds += Time.deltaTime;
    int temp;

    //    timeCount = (int)seconds;
    //    time.text = timeCount.ToString();

    time.text = minutepart + ":" + secondpart;

    if (seconds < 10)
    {
      secondpart = "0" + (int)seconds;
    }
    else
    {
      temp = (int)seconds;
      secondpart = temp.ToString();
    }

    if (minutes < 10)
    {
      minutepart = "0" + minutes;
    }
    else
    {
      minutepart = minutes.ToString();
    }

    if (seconds >= 60)
    {
      minutes++;
      seconds = 0;
      //multiplier++;
      //Debug.Log(multiplier);
    }

  }

  //Respawn Player at checkpoint

  public void RespawnPlayer()
  {
		m.anim.SetTrigger("TriviaCorrect");
    Invoke("ToggleScreenIsActive", 0.1f);

    //respawn player at checkpoint
    player.transform.position = currCheckpoint.transform.position;
    //cc.ResetCameraPos();

    //Unpause game
    SetTimeScale(1);

    //reset the speed and jumpspeed
    m.ResetSpeed();

    //Take away a life
    lives--;
    switch (lives)
    {
      case 0:
        life1.SetActive(false);
        break;

      case 1:
        life2.SetActive(false);
        break;

      case 2:
        life3.SetActive(false);
        break;
    }

    Debug.Log("Here we gooooooo!!");

    //enable the floor collider after pitfall
    floorCollider.enabled = true;
  }

  // methodes voor de extra schermen

  public void ToggleYouDiedScreen()
  {
    youdiedScreen.SetActive(true);
    SetTimeScale(0);
  }

  public void ToggleYouDied()
  {
    if (youdiedScreen.activeSelf)
    {
      youdiedScreen.SetActive(false);
      TriviaToggle();
    }
    else
    {
      ToggleScreenIsActive();
      m.Stop();
      Invoke("ToggleYouDiedScreen", 3);
      //ToggleYouDiedScreen();
    }
  }

  public void ToggleTriviaCorr()
  {
    if (triviaCorrScreen.activeSelf)
    {
      triviaCorrScreen.SetActive(false);
      RespawnPlayer();
      isPaused = false;
    }
    else
    {
      triviaCorrScreen.SetActive(true);
      HideTrivia();
    }
  }

  public void ToggleTriviaWrong()
  {
    if (triviaWrongScreen.activeSelf)
    {
      triviaWrongScreen.SetActive(false);
      GameOverToggle();
    }
    else
    {
      triviaWrongScreen.SetActive(true);
      HideTrivia();
    }
  }

  //Score

  public void AddDiamondToScore()
  {
    diamonds++;
    Debug.Log(diamonds);
  }

  public void SetScore()
  {
    score.text = diamonds.ToString();
    bonus = lives * 20;
  }

  //End Game
  public void EndGame()
  {
    Invoke("ShowEndScreen", 2.5f);
  }

  public void ShowEndScreen()
  {
    endScreen.SetActive(true);
    endScore.text = "Met een punten aantal van " + diamonds + bonus + "!";
  }

  public void ToggleScreenIsActive()
  {
    if (screenIsNotActive)
    {
      screenIsNotActive = false;
    }
    else
    {
      screenIsNotActive = true;
    }
  }

  public void SelectCharacter(int characterIndex)
  {
    characterSelectPanel.SetActive(false);
    GameObject spawnedPlayer = Instantiate(characters[characterIndex], spawnPos, Quaternion.identity) as GameObject;
    m = spawnedPlayer.GetComponent<Movement>();

    cc.SetMovement();
  }
}


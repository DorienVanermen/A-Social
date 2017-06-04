using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;
using UnityEngine.EventSystems;
using System.Linq;

public class CollectionManager : MonoBehaviour
{
	public GameObject confirmScreen;
	public GameObject DescriptionCanvas;
  public Image pic;
	public Text title, description;

	private GameObject lastclicked;

	private string btnName;
  public bool isActive;




	// Update is called once per frame
	void Update ()
  	{
    	if(DescriptionCanvas != null)
    	{
      		if (DescriptionCanvas.activeInHierarchy && Input.anyKey)
      		{
        		Debug.Log("Button was pushed :)");
        		CloseDescription();
      		}
    	}
	}

  public void Home()
  {
    SceneManager.LoadScene("Main Menu");
  }

	public void ShowDescription()
	{
		DescriptionCanvas.SetActive (true);
    isActive = true;
    btnName = EventSystem.current.currentSelectedGameObject.name;

    switch (btnName)
    {
      case "Koekjes Doos":
        title.text = btnName;
        description.text = "Wist je dat er vroeger maar liefs 20 koekjes- en chocolade fabrieken binnen de grote ring van Antwerpen waren?!";
        pic.sprite = Resources.Load<Sprite>("Artwork/Cookiejar") as Sprite;
        break;

      case "Antwerpse Want":
        title.text = btnName;
        description.text = "Een winters variant van de welbekende Antwerpse handjes!!";
        pic.sprite = Resources.Load<Sprite>("Artwork/AntwerpseWant") as Sprite;
        break;

      case "Een Hond Uit Vlaanderen":
        title.text = btnName;
        description.text = "Een zeer bekende roman die in Japan een echte hit is! SPOILER: Samson komt er niet in.";
        pic.sprite = Resources.Load<Sprite>("Artwork/Book") as Sprite;
        break;
	
	    case "Okapi":
		    title.text = btnName;
		    description.text = "Een zeldzaam dier uit de jungle van Congo. Deze verwante van de giraf werd voor het eerst ten toon gesteld in de Zoo van Antwerpen.";
		    pic.sprite = Resources.Load<Sprite>("Artwork/Okapi") as Sprite;
		    break;

	    case "Kathedraal":
		    title.text = btnName;
		    description.text = "De skyline van Antwerpen. Van 1352 tot 1521 onder constructie en nog is de tweede toren niet afgewerkt.";
		    pic.sprite = Resources.Load<Sprite>("Artwork/Kathedraal") as Sprite;
		    break;

	    case "Container":
		    title.text = btnName;
		    description.text = "Deze grote opslagdoos komt veel voor in de haven van Antwerpen en op VTM.";
		    pic.sprite = Resources.Load<Sprite>("Artwork/Container") as Sprite;
		    break;

      case "Vlaaikensgang":
        title.text = btnName;
        description.text = "De geheime Vlaeykensgang dateert van het jaar 1591 en verbindt de Hoogstraat, de Oude Koornmarkt eb de Pelgrimstraat met elkaar.";
        pic.sprite = Resources.Load<Sprite>("Artwork/Vlaaikensgang") as Sprite;
        break;

      case "Ruien":
        title.text = "Zaklamp";
        description.text = "Een doodgewone zaklamp, dit kan van pas komen als je de Ruien, de voormalige grachten en riolen van Antwerpen, gaat verkennen.";
        pic.sprite = Resources.Load<Sprite>("Artwork/Ruien") as Sprite;
        break;

      case "MHKA":
        title.text = "Yoga Matje";
        description.text = "Met je yoga matje kan je iedere week terecht bij het Museum van de Hedendaagse Kunst, voor Yoga in groep. Wat kan er nu beter zijn dan ontspannen op zo'n mooie locatie!";
        pic.sprite = Resources.Load<Sprite>("Artwork/MHKA") as Sprite;
        break;

      case "Study360":
        title.text = "Geodriehoek";
        description.text = "Ben je de muren van je kot beugezien? Dan kan je dankzij Study360 op allerhande plaatsen terecht. In een chique penthouse? Of zelfs in een kasteel? Waarom niet?";
        pic.sprite = Resources.Load<Sprite>("Artwork/Study360") as Sprite;
        break;

      case "Studay":
        title.text = "Polsbandje";
        description.text = "De perfecte plaats om het schooljaar te starten is nergens anders dan op Studay! Een festival speciaal voor de studenten van Antwerpen!!";
        pic.sprite = Resources.Load<Sprite>("Artwork/Studay") as Sprite;
        break;

      case "Vlot":
        title.text = "Het Vlot";
        description.text = "Op het vlot kan je met een mooi uitzicht over de Schelde eventjes van al de stress weglopen, of uitdobberen?";
        pic.sprite = Resources.Load<Sprite>("Artwork/Vlot") as Sprite;
        break;

      default:
        break;
    }
	}

	public void CloseDescription()
	{
		DescriptionCanvas.SetActive (false);
	}

	public void ToggleConfirmScreen()
	{
		if(confirmScreen.activeSelf)
		{
			confirmScreen.SetActive(false);
		}
		else
		{
			confirmScreen.SetActive(true);
		}

	}

	public void ResetGame()
	{
		PlayerPrefs.DeleteAll();
		ToggleConfirmScreen ();
    Application.LoadLevel(Application.loadedLevel);
	}
}

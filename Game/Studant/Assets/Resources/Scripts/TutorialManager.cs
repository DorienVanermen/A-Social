using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TutorialManager : MonoBehaviour
{

  //Tutorial elements
  public GameObject jumpTutorial, arrow, triviaTutorial, staminaTutorial;
  public GameManager gm;
  //bool isPaused = false;
	
	// Update is called once per frame
	void Update ()
  {
      if (staminaTutorial.activeSelf && Input.anyKey)
      {
        staminaTutorial.SetActive(false);
        gm.SetTimeScale(1);
      }

      if(triviaTutorial.activeInHierarchy && Input.anyKey)
      {
        triviaTutorial.SetActive(false);
        gm.TriviaToggle();
      }
  }

  public void JumpTutorial()
  {
    jumpTutorial.SetActive(true);
    arrow.SetActive(true);
  }

  public void TriviaTutorial()
  {
    triviaTutorial.SetActive(true);
    gm.SetTimeScale(0);
  }

  public void SlowDownTutorial()
  {
    staminaTutorial.SetActive(true);
    gm.SetTimeScale(0);
  }
}

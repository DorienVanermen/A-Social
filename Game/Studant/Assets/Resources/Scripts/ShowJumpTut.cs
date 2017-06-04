using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ShowJumpTut : MonoBehaviour
{
  public GameManager gm;
  public TutorialManager tm;
  bool isPaused;

	// Update is called once per frame
	void Update ()
  {
    if(Input.anyKey && Time.timeScale == 0.5f)
    {
      gm.SetTimeScale(1);
    }
	}

  void OnTriggerEnter2D(Collider2D other)
  {
    tm.JumpTutorial();
    gm.SetTimeScale(0.5f);
  }
}

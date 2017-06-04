using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class SlowDownTut : MonoBehaviour
{
  public Movement m;
  public TutorialManager tm;

  void OnTriggerEnter2D (Collider2D other)
  {
    tm.SlowDownTutorial();
    m.ShowTutorial();
  }
}

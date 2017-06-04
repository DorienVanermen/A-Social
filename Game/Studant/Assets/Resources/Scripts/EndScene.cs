using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class EndScene : MonoBehaviour
{
  #region

  public CameraControl cc;
  public GameManager gm;

  #endregion
  void OnTriggerEnter2D(Collider2D other)
  {
    cc.SetGameIsOver();
    gm.EndGame();
  }
}

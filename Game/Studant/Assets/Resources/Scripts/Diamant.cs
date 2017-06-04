using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Diamant : MonoBehaviour
{
  public GameManager gm;

  void OnTriggerEnter2D(Collider2D other)
  {
    gm.AddDiamondToScore();
    Destroy(this.gameObject);

  }
}

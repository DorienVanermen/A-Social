using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Stamina : MonoBehaviour
{
  public Movement m;

  void OnTriggerEnter2D(Collider2D other)
  {
    m = other.GetComponent<Movement>();
    m.ResetSpeed();
    Destroy(this.gameObject);
  }
}

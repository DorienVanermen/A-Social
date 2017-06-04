using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Poop : MonoBehaviour
{
  public Movement m;

  void OnTriggerEnter2D(Collider2D other)
  {
    m = other.GetComponent<Movement>();
    m.SlowDown();
    Destroy(this.gameObject);
  }
}

using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Checkpoints : MonoBehaviour
{
  private GameManager gm;

	void Start()
  {
    gm = GameObject.Find("GameManager").GetComponent<GameManager>();
  }

	void OnTriggerEnter2D(Collider2D other)
	{
		if (other.tag == "Player")
		{
      Debug.Log("Checkpoint!!");
			gm.currCheckpoint = gameObject;
			//Debug.Log("Activated checkpoint" + transform.position);
		}
	}
}

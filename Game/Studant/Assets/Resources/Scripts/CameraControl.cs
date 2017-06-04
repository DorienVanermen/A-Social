using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CameraControl : MonoBehaviour
{
  public Transform player;
  bool gameIsOver;

  private Vector3 moveTemp;

  private float speed = 5;
  private float xDifference, yDifference;
  private Vector2 velocity;

  private float movementTreshold = -1f;

  void Start()
  {
    gameIsOver = false;
  }

  void LateUpdate ()
  {
    //player = GameObject.FindGameObjectWithTag("Player").transform;
    if (player != null)
    {
      xDifference = player.transform.position.x - transform.position.x;

      if (xDifference > movementTreshold && !gameIsOver)
      {
        MoveCamera();
      }
    }
  }

  void MoveCamera()
  {
    moveTemp = player.transform.position;
    moveTemp.z = -5;
	  transform.position = Vector3.Lerp(transform.position, moveTemp, Time.deltaTime * speed);
    //Vector3.MoveTowards(transform.position, moveTemp, speed * Time.deltaTime);
  }

  public void SetGameIsOver()
  {
    gameIsOver = true;
  }

  public void SetMovement()
  {
    player = GameObject.FindGameObjectWithTag("Player").transform;
  }

}

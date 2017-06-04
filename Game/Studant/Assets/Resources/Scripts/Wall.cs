using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Wall : MonoBehaviour
{
  public TutorialManager tm;
  //private GameObject gameManager;
  public GameManager gm;
	private Movement m;
	public AudioSource audio;
  
	void Awake()
	{
		audio = GetComponent<AudioSource> ();

	}

	// Use this for initialization
	void Start ()
	{
    gm = GameObject.Find("GameManager").GetComponent<GameManager>();
		//gameManager = GameObject.Find ("GameManager");
		//gameManScript = gameMan.GetComponent<GameManager>();
	}
		
	void OnTriggerEnter2D (Collider2D other)
	{
		audio.Play ();
		m = other.gameObject.GetComponent<Movement>();

    	//if(Application.loadedLevelName == "Tutorial")
    	//{
     //     Invoke("CallTriviaTutorial", 1f);
     // }
    	//else
    	//{
      		gm.ToggleYouDied();
    	//}
    m.anim.SetTrigger("HitWall");
  }
}

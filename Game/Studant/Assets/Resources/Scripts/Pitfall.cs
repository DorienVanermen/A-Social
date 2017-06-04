using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Pitfall : MonoBehaviour {

  	public GameObject currTile;
	private Collider2D col1;
	private Collider2D col2;
  	private GameManager gm;
  	private Movement m;

	//play audio
	public AudioSource audio;

	void Awake()
	{
		audio = GetComponent<AudioSource> ();

	}

	// Use this for initialization
	void Start ()
	{
		//player = GameObject.Find("Player");
		col1 = GetComponent<Collider2D>();
		col2 = currTile.GetComponent<Collider2D>();

    	gm = GameObject.Find("GameManager").GetComponent<GameManager>();
    	//m = GameObject.FindGameObjectWithTag("Player").GetComponent<Movement>();
	}

	void OnCollisionEnter2D(Collision2D other)
	{
		audio.Play ();
    	m = other.gameObject.GetComponent<Movement>();
    	col1.enabled = false;
		col2.enabled = false;

		m.anim.SetTrigger("FallInPit");
    	gm.ToggleYouDied();
	}

	void OnCollisionEnxit2D(Collision2D other)
	{
		col1.enabled = true;
		col2.enabled = true;
	}
}

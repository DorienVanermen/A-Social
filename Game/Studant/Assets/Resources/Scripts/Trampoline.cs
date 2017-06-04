using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Trampoline : MonoBehaviour {

	public float springForce = 30;
	public Collision collision;
	public GameObject subject;

	public AudioSource audio;

	void Awake ()
	{
		audio = GetComponent<AudioSource> ();

	}

	// Update is called once per frame
	void Update ()
	{
		
	}

	void OnCollisionEnter2D(Collision2D col)
	{
		if(col.gameObject.tag == "Player")
		{
			col.gameObject.GetComponent<Rigidbody2D>().AddForce(new Vector2( 0, springForce));
			Debug.Log("We bounced...or did we?");

			audio.Play ();

		}
	}
}

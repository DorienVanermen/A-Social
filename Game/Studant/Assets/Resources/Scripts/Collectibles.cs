using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Collectibles : MonoBehaviour {
	
	//public CollectibleManager colMan;
	public GameManager gm;
	public bool isCollected;

	// Use this for initialization
	void Awake ()
	{
		//PlayerPrefs.DeleteKey ("collectVal"); //used to reset PlayerPrefs after tests
		name = gameObject.name;
		isCollected = PlayerPrefsX.GetBool("collected");
		//colMan = GameObject.Find ("CollectibleManager").GetComponent<CollectibleManager>();

	}

	void Start ()
	{
		
	}
	
	// Update is called once per frame
	void Update ()
	{
//		if (isCollected)
//		{
//      	switch (name)
//      	{
//        	case "KoekjesDoos": colMan.cookieboxCollected = true; break;
//        	case "Antwerpse Want": colMan.gloveCollected = true; break;
//        	case "Een Hond Uit Vlaanderen": colMan.bookCollected = true; break;
//        	case "Okapi": colMan.okapiCollected = true; break;
//        	case "Kathedraal": colMan.cathedralCollected = true; break;
//        	case "Container": colMan.containerCollected = true; break;
//        	case "Vlaaikensgang": colMan.vlaaikensgangCollected = true; break;
//        	case "Ruien": colMan.ruienCollected = true; break;
//        	case "MHKA": colMan.mhkaCollected = true; break;
//      	}
//
//      	//if (name == "KoekjesDoos") { colMan.cookieboxCollected = true; }
//      	//else if (name == "Antwerpse Want") { colMan.gloveCollected = true; }
//      	//else if (name == "Een Hond Uit Vlaanderen") { colMan.bookCollected = true; }
//      	//else if (name == "Okapi") { colMan.okapiCollected = true; }
//      	//else if (name == "Kathedraal") { colMan.cathedralCollected = true; }
//      	//else if (name == "Container") { colMan.containerCollected = true; }
//
//      		Destroy(gameObject);
//		}
//		else
//		{
//			switch (name)
//			{
//				case "KoekjesDoos": colMan.cookieboxCollected = false; break;
//				case "Antwerpse Want": colMan.gloveCollected = false; break;
//				case "Een Hond Uit Vlaanderen": colMan.bookCollected = false; break;
//				case "Okapi": colMan.okapiCollected = false; break;
//				case "Kathedraal": colMan.cathedralCollected = false; break;
//				case "Container": colMan.containerCollected = false; break;
//				case "Vlaaikensgang": colMan.vlaaikensgangCollected = false; break;
//				case "Ruien": colMan.ruienCollected = false; break;
//				case "MHKA": colMan.mhkaCollected = false; break;
//			}
//
//		}
	}

	public void OnTriggerEnter2D(Collider2D col)
	{
//		if (col.gameObject.tag == "Player") {
//			collected = 1;
//			PlayerPrefs.SetInt("collectVal", collected);
//			Debug.Log ("collected");
//		} 
//		else
//		{
//			collected = 0;
//		}

		switch (name)
		{
		  case "KoekjesDoos": PlayerPrefsX.SetBool("cookieboxIsCollected", true); break;
		  case "Antwerpse Want": PlayerPrefsX.SetBool("gloveIsCollected", true); break;
		  case "Een Hond Uit Vlaanderen": PlayerPrefsX.SetBool("bookIsCollected", true); break;
		  case "Okapi": PlayerPrefsX.SetBool("okapiIsCollected", true); break;
		  case "Kathedraal": PlayerPrefsX.SetBool("cathedralIsCollected", true); break;
		  case "Container": PlayerPrefsX.SetBool("containerIsCollected", true); break;
		  case "Vlaaikensgang": PlayerPrefsX.SetBool("vlaaikensgangIsCollected", true); break;
		  case "Ruien": PlayerPrefsX.SetBool("ruienIsCollected", true); break;
		  case "MHKA": PlayerPrefsX.SetBool("mhkaIsCollected", true); break;
      case "Study360": PlayerPrefsX.SetBool("study360IsCollected", true); break;
      case "Studay": PlayerPrefsX.SetBool("studayIsCollected", true); break;
      case "Vlot": PlayerPrefsX.SetBool("vlotIsCollected", true); break;
    }

		Destroy(gameObject);
	}
}


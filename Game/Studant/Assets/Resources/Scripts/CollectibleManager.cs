using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CollectibleManager : MonoBehaviour
{
	public bool cookieboxCollected, gloveCollected, bookCollected, okapiCollected, cathedralCollected, containerCollected,
              vlaaikensgangCollected, ruienCollected, mhkaCollected, study360Collected, studayCollected, vlotCollected, allCollected;

	// Use this for initialization
	void Start ()
  	{
		DontDestroyOnLoad(gameObject);
	}

	void Update ()
	{
		if (cookieboxCollected && gloveCollected && bookCollected && okapiCollected && cathedralCollected && containerCollected && vlaaikensgangCollected && ruienCollected && mhkaCollected && study360Collected && studayCollected && vlotCollected)
    {
			allCollected = true;
		} else
		{
			allCollected = false;
		}
	}

  public void CollectAllCollectables()
  {
    PlayerPrefsX.SetBool("cookieboxIsCollected", true);
		PlayerPrefsX.SetBool("gloveIsCollected", true); 
		PlayerPrefsX.SetBool("bookIsCollected", true); 
		PlayerPrefsX.SetBool("okapiIsCollected", true); 
		PlayerPrefsX.SetBool("cathedralIsCollected", true); 
		PlayerPrefsX.SetBool("containerIsCollected", true); 
		PlayerPrefsX.SetBool("vlaaikensgangIsCollected", true);
		PlayerPrefsX.SetBool("ruienIsCollected", true); 
		PlayerPrefsX.SetBool("mhkaIsCollected", true); 
    PlayerPrefsX.SetBool("study360IsCollected", true); 
    PlayerPrefsX.SetBool("studayIsCollected", true); 
    PlayerPrefsX.SetBool("vlotIsCollected", true);
  }
}

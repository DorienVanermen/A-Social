using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CollectibleLock : MonoBehaviour
{

  public GameObject Lock1, Lock2, Lock3, Lock4, Lock5, Lock6, Lock7, Lock8, Lock9, Lock10, Lock11, Lock12;

	public bool cookieboxCollected, gloveCollected, bookCollected, okapiCollected, cathedralCollected, containerCollected,
	vlaaikensgangCollected, ruienCollected, mhkaCollected, study360Collected, studayCollected, vlotCollected, allCollected;


	// Use this for initialization
	void Start ()
	{
		cookieboxCollected = PlayerPrefsX.GetBool ("cookieboxIsCollected");
		gloveCollected = PlayerPrefsX.GetBool ("gloveIsCollected");
		bookCollected = PlayerPrefsX.GetBool ("bookIsCollected");
		okapiCollected = PlayerPrefsX.GetBool ("okapiIsCollected");
		cathedralCollected = PlayerPrefsX.GetBool ("cathedralIsCollected");
		containerCollected = PlayerPrefsX.GetBool ("containerIsCollected");
		vlaaikensgangCollected = PlayerPrefsX.GetBool ("vlaaikensgangIsCollected");
		ruienCollected = PlayerPrefsX.GetBool ("ruienIsCollected");
		mhkaCollected = PlayerPrefsX.GetBool ("mhkaIsCollected");
    study360Collected = PlayerPrefsX.GetBool("study360IsCollected");
    studayCollected = PlayerPrefsX.GetBool("studayIsCollected");
    vlotCollected = PlayerPrefsX.GetBool("vlotIsCollected");
    allCollected = PlayerPrefsX.GetBool ("allIsCollected");
	}
	
	// Update is called once per frame
	void Update ()
	{
		if (cookieboxCollected)
    {
			Lock1.SetActive (false);
		} 
		else 
		{
			Lock1.SetActive (true);
		}


		if(gloveCollected)
		{
			Lock2.SetActive(false);
		}
		else 
		{
			Lock2.SetActive (true);
		}


		if(bookCollected)
		{
			Lock3.SetActive(false);

		}
		else 
		{
			Lock3.SetActive (true);
		}


		if(okapiCollected)
		{
			Lock4.SetActive(false);
		}
		else 
		{
			Lock4.SetActive (true);
		}


		if(cathedralCollected)
		{
			Lock5.SetActive(false);
		}
		else 
		{
			Lock5.SetActive (true);
		}


		if(containerCollected)
		{
			Lock6.SetActive(false);
		}
		else 
		{
			Lock6.SetActive (true);
		}


    if(vlaaikensgangCollected)
    {
     	Lock7.SetActive(false);
    }
		else 
		{
			Lock7.SetActive (true);
		}


    if(ruienCollected)
    {
      Lock8.SetActive(false);
    }
		else 
		{
			Lock8.SetActive (true);
		}


    if(mhkaCollected)
    {
    	Lock9.SetActive(false);
    }
		else 
		{
			Lock9.SetActive (true);
		}

    if(study360Collected)
    {
      Lock10.SetActive(true);
    }
    else
    {
      Lock10.SetActive(false);
    }

    if(studayCollected)
    {
      Lock11.SetActive(true);
    }
    else
    {
      Lock11.SetActive(false);
    }

    if(vlotCollected)
    {
      Lock12.SetActive(true);
    }
    else
    {
      Lock12.SetActive(false);
    }

		if (cookieboxCollected && gloveCollected && bookCollected && okapiCollected && cathedralCollected && containerCollected && vlaaikensgangCollected && ruienCollected && mhkaCollected && study360Collected && studayCollected && vlotCollected)
    {
			PlayerPrefsX.SetBool("allIsCollected",true);
		}
    else
		{
			PlayerPrefsX.SetBool("allIsCollected",false);
		}
	}
}

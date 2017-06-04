using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class CollectibleManager : MonoBehaviour
{
	public bool cookieboxCollected, gloveCollected, bookCollected, okapiCollected, cathedralCollected, containerCollected,
              vlaaikensgangCollected, ruienCollected, mhkaCollected, allCollected;

	// Use this for initialization
	void Start ()
  	{
		DontDestroyOnLoad(gameObject);
	}

	void Update ()
	{
		if (cookieboxCollected && gloveCollected && bookCollected && okapiCollected && cathedralCollected && containerCollected && vlaaikensgangCollected && ruienCollected && mhkaCollected) {
			allCollected = true;
		} else
		{
			allCollected = false;
		}
	}
}

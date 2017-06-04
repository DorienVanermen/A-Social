using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;

public class MainMenuManager : MonoBehaviour
{

  private static int curpage;

	public void Scene()
  {
    curpage = Scroll._currentPage;
    Debug.Log(curpage);

    switch (curpage)
    {
      case 1:
        SceneManager.LoadScene("Level1"); break;

      case 2:
        SceneManager.LoadScene("Level2"); break;

      case 3:
        SceneManager.LoadScene("Level3"); break;
    }

    //if (curpage == 1)
    //{
    //  SceneManager.LoadScene("Tutorial");
    //}
    //if (curpage == 2)
    //{
    //  SceneManager.LoadScene("Level1");
    //}
    
  }

  public void Collection()
  {
    SceneManager.LoadScene("Collection");
  }
}

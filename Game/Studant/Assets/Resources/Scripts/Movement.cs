using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Movement : MonoBehaviour
{
  	#region
  	private float speed = 3;
	  private float maxSpeed = 6;
	  private float minSpeed = 0;
	  private float jumpSpeed = 10f;
	  public float groundedDistance;

	  private float tempJumpSpeed, tempMoveSpeed;

	  private Vector3 moveTemp;
	  public float countdown;
	  private float timeLaps = 8f;
	  private Rigidbody2D myRig;

    public GameManager gm;
	  public Animator anim;

	//play audio
	public AudioSource audio;
	public AudioSource diamondAudio;
	public AudioSource colAudio;
	public AudioSource handAudio;
	public AudioSource drolAudio;
	public GameObject diamondAud;
	public GameObject collAud;
	public GameObject handAud;
	public GameObject drolAud;

	  #endregion

	  void Awake()
	  {
			audio = GetComponent<AudioSource> ();
		  anim = GetComponent<Animator>();
		  gm = GameObject.Find("GameManager").GetComponent<GameManager>();
		//audiosources
		diamondAudio = diamondAud.GetComponent<AudioSource> ();
		colAudio = collAud.GetComponent<AudioSource> ();
		handAudio = handAud.GetComponent<AudioSource> ();
		drolAudio = drolAud.GetComponent<AudioSource> ();
	  }

	  void Start()
	  {
		  tempJumpSpeed = jumpSpeed;
		  tempMoveSpeed = speed;
	    myRig = GetComponent<Rigidbody2D>();
		if(gameObject.name == "Mascot(Clone)")
		{
			groundedDistance = 2.4f;
		}
		else
		{
			groundedDistance = 2.1f;
		}

		//animation.Play ();

	  }
		

	//Input evalueren en jumpforce toepassen in update 
	//Note: jumpforce geeft geen problemen in udpate functie, maar manueel velocity zetten bv wel, daarom verhuisd naar fixedupdate.
	  void Update ()
  {
		if (Input.GetMouseButtonDown (0) && gm.screenIsNotActive && IsGrounded ()) {
			myRig.AddForce (Vector2.up * tempJumpSpeed, ForceMode2D.Impulse);
			anim.SetTrigger ("jump");
			Debug.Log ("jumped!");

			myRig.gravityScale = 1;

			audio.Play ();
		}

		if (!IsGrounded() && gameObject.name == "Mascot(Clone)")
    {
      if(Input.GetMouseButton(0))
      {
        myRig.gravityScale = 0.5f;
        anim.SetTrigger("glide");
      }
      else
      {
        myRig.gravityScale = 1f;
        //anim.ResetTrigger("glide");
      }
    }
  }

	//physics uitvoeren in physics update, (fixed interval .02s)
	  void FixedUpdate ()
	{
		Vector3 move = new Vector3 (tempMoveSpeed, myRig.velocity.y, 0f);
		//move.x = Mathf.Clamp(move.x, minSpeed, maxSpeed);

		myRig.velocity = move;

		countdown += Time.deltaTime;

		if (countdown >= timeLaps)
		{
      		//maxSpeed -= 1;
      		tempMoveSpeed -= 0.5f;
			    countdown = 0;
			    Debug.Log("We're slowing down!" + tempMoveSpeed);
		}
	}

	  public bool IsGrounded()
	  {
	    RaycastHit2D hit = Physics2D.Raycast(transform.position, Vector2.down, groundedDistance);
	    Debug.DrawLine(transform.position, transform.position + (Vector3.down * groundedDistance), Color.red, 4);
	    Debug.Log(hit.collider);
	    return (hit.collider != null);
	  }

	//Niet hardcoded variabelen gebruiken, maar vooropige variabelen ;)
	//Hiervoor stond er: speed = 6;
	  public void ResetSpeed()
	  {
		  tempMoveSpeed = speed;
		  tempJumpSpeed = jumpSpeed;
	    Debug.Log("Ah so refreshing!");

      anim.ResetTrigger("HitWall");
      anim.ResetTrigger("FallInPit");
	  }

    public void SlowDown()
    {
      tempMoveSpeed = 1.5f;
    }

	  public void ShowTutorial()
	  {
	    timeLaps = 2f;
	  }

	//0 en Int.MaxValue ofzo mag je wel hardcoded plaatsen 
	  public void Stop()
	  {
		  tempMoveSpeed = 0;
		  tempJumpSpeed = 0;
	  }

	void OnTriggerEnter2D(Collider2D other)
	{
		if(other.name == "Diamant")
		{
			diamondAudio.Play ();

		}
		if(other.tag == "Collectible")
		{
			colAudio.Play ();

		}
		if(other.name == "Handje")
		{
			handAudio.Play ();

		}
		if(other.name == "Drolletje")
		{
			drolAudio.Play ();

		}

	}

}

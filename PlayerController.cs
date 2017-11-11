using UnityEngine;
using System.Collections;

public class PlayerController : MonoBehaviour
{

    //Spawn Variables
    public float playerSetX;
    public float playerSetY;
    public float playerSetZ;


    //Movement Variables
    public float playerJumpHeight = 2;

    void Start()
    {

        //Player Spawn Point

        //This is where our player will start when the game is played.

        //player == game object. Game object == transform!
        transform.position = new Vector3(playerSetX, playerSetY, playerSetZ);
    }

    void Update()
    {

        //player to move up jumping

        //player (gameobject) aka transform to move when i press the arrow keys or keyboard keys

        //jump
        if (Input.GetKeyDown(KeyCode.A) || Input.GetKeyDown(KeyCode.D) || Input.GetKeyDown(KeyCode.S) || Input.GetKeyDown(KeyCode.W) || Input.GetKeyDown(KeyCode.Space) || Input.GetKeyDown(KeyCode.UpArrow))
        {

            transform.position += new Vector3(playerSetX, playerJumpHeight, playerSetZ);
        }
    }

}

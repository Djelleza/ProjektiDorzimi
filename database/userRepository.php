<?php 
include_once 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }


    function insertUser($user){

        $conn = $this->connection;

        $id = $user->getId();
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $role = $user->getRole();
        $editedBy = $user->getEditedBy();
        if ($editedBy === null) {
            $editedBy = isset($_SESSION['user']) ? $_SESSION['user'] : 'no edit';
        }
        $sql = "INSERT INTO user (id,username,email,password,role,editedBy) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$username,$email,$password,'user',$editedBy]);
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM user";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id){
        $conn = $this->connection;
    
        $sql = "SELECT * FROM user WHERE id=?";
    
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $user = $statement->fetch();
    
        return $user;
    }

    function updateUser($id, $username, $email, $password) {
        $conn = $this->connection;
    
        $sql = "UPDATE user SET username=?, email=?, password=?, editedBy=? WHERE id=?";

        $editedBy = isset($_SESSION['user']) ? $_SESSION['user'] : 'unknown';
        $statement = $conn->prepare($sql);
    
        $statement->execute([$username, $email, $password, $editedBy, $id]);
    }

    function deleteUser($id){
        $conn = $this->connection;

        $sql = "DELETE FROM user WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$id]);

        echo "<script>alert('delete was successful'); </script>";
   } 

    function isUsernameTaken($username) {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) as count FROM user WHERE username = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$username]);

        $result = $statement->fetch();

        return $result['count'] > 0;
    }

    function isEmailTaken($email) {
        $conn = $this->connection;

        $sql = "SELECT COUNT(*) as count FROM user WHERE email = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$email]);

        $result = $statement->fetch();

        return $result['count'] > 0;
    }

    function isUsernameAndPasswordValid($username, $password) {
        $conn = $this->connection;

        $sql = "SELECT * FROM user WHERE username = ?";

        $statement = $conn->prepare($sql);
        $statement->execute([$username]);

        $user = $statement->fetch();
  
        if ($user && $password === $user['password']) {
            return true;
        }

        return false;
    }

    function getUserByUsername($username) {
       $conn = $this->connection;

       $sql = "SELECT * FROM user WHERE username = ?";

      $statement = $conn->prepare($sql);
      $statement->execute([$username]);

    return $statement->fetch();
    }

}
?>
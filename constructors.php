class SubjectNav {
	function __construct($subject){
        $servername = "localhost";
        $username = "calcs";
        $password = "Muaythai97!@";
        $database = "calcs";
        $conn = new mysqli($servername, $username, $password, $database);
        $this->subject = $subject;
        $sql = "SELECT * FROM `Navbar_Contents` WHERE `subject` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $this->subject);
        $stmt->execute();
        $this->result = $stmt->get_result();
        $this->conn = $conn;
}

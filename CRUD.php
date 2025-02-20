class Post {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    // Create (Tambah Data)
    public function create($title, $content) {
        $query = "INSERT INTO posts (title, content) VALUES (?, ?)";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$title, $content]);
    }

    // Read (Ambil Semua Data)
    public function getAll() {
        $query = "SELECT * FROM posts";
        return $this->db->query($query)->fetchAll();
    }

    // Update (Edit Data)
    public function update($id, $title, $content) {
        $query = "UPDATE posts SET title = ?, content = ? WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$title, $content, $id]);
    }

    // Delete (Hapus Data)
    public function delete($id) {
        $query = "DELETE FROM posts WHERE id = ?";
        $stmt = $this->db->prepare($query);
        return $stmt->execute([$id]);
    }
}
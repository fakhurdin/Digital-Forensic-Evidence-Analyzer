# 🕵️ Digital Forensic Evidence Analyzer

The **Digital Forensic Evidence Analyzer (DFEA)** is a secure, web-based platform designed to support forensic investigators and cybersecurity analysts in managing, analyzing, and preserving digital evidence. It provides a centralized system for storing digital artifacts, verifying integrity through cryptographic hashes, and maintaining the chain of custody — all critical for modern incident response and forensic investigations.

---

## 🚀 Features

- 🔐 **Secure Evidence Upload** — Supports uploading forensic artifacts (logs, images, dumps) with automatic hash generation (MD5/SHA256).
- 🗃️ **Case Management** — Organize multiple pieces of evidence into individual investigation cases.
- 👥 **User Role Management** — Role-based access control (e.g., Analyst, Admin, Investigator).
- 🧾 **Chain of Custody** — Tracks who uploaded/accessed evidence with timestamped audit logs.
- 📎 **Evidence Notes & Annotations** — Investigators can add comments and observations to each file.
- 📄 **Report Generation (Coming Soon)** — Generate PDF summaries for courtroom or internal review.
- 📊 **Hash Verification** — Re-verify evidence integrity anytime using secure hashing.
- 🛡️ **Secure Infrastructure** — Built with modern web security practices to ensure data confidentiality.

---

## 🧰 Tech Stack

| Component        | Technology          |
|------------------|---------------------|
| Frontend         | HTML, CSS, Bootstrap |
| Backend          | PHP (Laravel or Core PHP) |
| Database         | MySQL               |
| Deployment       | Apache / XAMPP / WAMP |
| Hashing          | PHP Hash Functions (SHA256, MD5) |

---

## 📦 Installation

1. Clone the repository:
   ```
   git clone https://github.com/yourusername/DFEA.git
   ```
2. Navigate to the project directory:
   ```
   cd DFEA
   ```
3. Set up the database:
   - Import the SQL schema located in the `database` folder into your MySQL database.

4. Configure the database connection:
   - Update the `config/database.php` file with your database credentials.

5. Start the server:
   - Use Apache, XAMPP, or WAMP to serve the application.

---

## 📖 Usage

- Access the application through your web browser at `http://localhost/DFEA/index.html`.
- Use the navigation menu to explore different sections of the application.
- Follow the prompts to upload evidence, manage cases, and generate reports.

---

## 🤝 Contributing

Contributions are welcome! Please submit a pull request or open an issue for any enhancements or bug fixes.

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
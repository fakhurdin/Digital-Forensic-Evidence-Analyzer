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

## 🔧 Installation & Setup

1. **Clone the repository**  
   ```bash
   git clone https://github.com/fakhurdin/Digital-Forensic-Evidence-Analyzer.git
   cd Digital-Forensic-Evidence-Analyzer
   ```

2. **Set up the environment**  
   - Install [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](https://www.wampserver.com/en/)
   - Place the project folder in your `htdocs/` directory.

3. **Import the database**  
   - Open `phpMyAdmin`
   - Create a database (e.g., `forensics_db`)
   - Import the provided SQL file (`database.sql` if included)

4. **Configure database connection**
   - Open the `config.php` or `.env` file
   - Add your MySQL credentials

5. **Run the project**
   - Start Apache and MySQL in XAMPP/WAMP
   - Visit: `http://localhost/Digital-Forensic-Evidence-Analyzer/`

---

## 👨‍💼 Use Case (Example)

An organization experiences suspicious activity. The forensic team uses DFEA to:
- Upload syslogs, memory dumps, and network captures.
- Attach all files to a case named “Data Exfiltration Investigation”.
- Annotate suspicious IPs and credentials.
- Re-verify file integrity using hash validation.
- Export a report for legal and internal compliance review.

---

## 🧑‍💻 Contributors

- **Fakhur Ul Din** – [GitHub](https://github.com/fakhurdin)

---

## 📄 License

This project is licensed under the [MIT License](LICENSE).

---

## 📬 Contact

Have questions, suggestions, or collaboration ideas?

📧 Email: `fakhurdindev@gmail.com`  
🌐 GitHub: [@fakhurdin](https://github.com/fakhurdin)

---

## 🙌 Acknowledgments

- This project is developed as part of a cybersecurity learning journey.
- Special thanks to mentors, open-source communities, and academic support.

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
---

# 🤖 SimSimi-Like Chatbot API (PHP)

A lightweight, self-hosted SimSimi-style chatbot API built with **PHP + SQLite**, designed for **Render.com**.  
Supports unlimited queries, teaching, and persistent memory.

> **Author:** Mot Mot Oyamat  
> **Language:** PHP  
> **Database:** SQLite (persistent via Render Disk)

---

## ✨ Features

- 🚀 Simple REST API
- 🧠 Persistent memory (never forgets learned replies)
- 📚 Teach new responses dynamically
- ♾️ Unlimited queries (no external APIs)
- ☁️ Optimized for Render.com
- 🪶 Lightweight & fast

---

## 📁 Project Structure

. ├── index.php        # Router ├── sim.php          # Chat endpoint ├── teach.php        # Teaching endpoint ├── db.php           # Database connection (persistent) ├── composer.json    # Required for Render PHP └── README.md

---

## 🌐 API Endpoints

### 🔹 Chat

GET /sim?query=hi

**Response**
```
{
  "query": "hi",
  "answer": "hello!"
}
```

---

### 🔹 Teach

GET /teach?ask=hello&ans=hey!

**Response**
```
{
  "status": "learned",
  "ask": "hello",
  "answer": "hey!"
}
```

---

🧠 Persistent Memory (IMPORTANT)

This project uses SQLite with Render Persistent Disk.

Why?

Render wipes the filesystem on restarts unless a disk is attached.

Required Render Disk Settings

Setting	Value

Mount Path	/var/data
Size	1 GB


The database file will be automatically created at:

/var/data/database.db

No manual setup needed.


---

🛠️ Deploy on Render

Render Service Settings

Type: Web Service

Runtime: PHP

Build Command


composer install

Start Command


php -S 0.0.0.0:10000


---

🧪 Testing

1. Teach the bot:



/teach?ask=test&ans=working

2. Restart the Render service


3. Ask again:



/sim?query=test

If it responds working, persistence is successful ✅


---

🔐 Security Notes

/teach is open by default

You may want to add:

API key protection

Rate limiting

Admin-only teaching




---

🚧 Future Improvements

Smarter matching (NLP)

Multiple answers per question

JSON POST support

Telegram / Discord bot

AI fallback (optional)



---

📜 License

Free to use, modify, and distribute.


---

👤 Author

Mot Mot Oyamat
Self-hosted chatbot enthusiast & developer


---

> Built with simplicity, persistence, and control in mind.



---

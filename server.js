const WebSocket = require("ws");

const wss = new WebSocket.Server({ port: 8081 });

wss.on("connection", (ws) => {
  console.log("Client connected");

  // שליחת הודעה כשיש לקוח מחובר
  ws.send(JSON.stringify({ user: "Server", text: "Welcome to the chat!" }));

  // קבלת הודעות מהלקוח
  ws.on("message", (message) => {
    console.log("Received:", message);

    // מוודא שקובץ ג'ייסון תקין
    try {
      const parsedMessage = JSON.parse(message); 
      wss.clients.forEach((client) => {
        if (client.readyState === WebSocket.OPEN) {
          client.send(JSON.stringify(parsedMessage)); // שידור הודעה בפורמט ג'ייסון 
        }
      });
    } catch (error) {
      console.error("Invalid message format:", error);
    }
  });

  ws.on("close", () => {
    console.log("Client disconnected");
  });
});

console.log("WebSocket server running on ws://localhost:8081");

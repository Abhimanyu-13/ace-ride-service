const { initializeApp, cert, getApps, getApp } = require('firebase-admin/app');
const { getMessaging } = require('firebase-admin/messaging');
const express = require('express');
const app = express();
const PORT = 8001;

app.use(express.json());

app.post('/sendPushnotification', async (req, res) => {
    try {
        // console.log(req.body, "<<------------- body");
        
        const {payload} = req.body;
        // console.log(payload, "<<------------- fcm payload");

        const serviceAccountKey = {
            "type": req.body.type,
            "project_id": req.body.project_id,
            "private_key_id": req.body.private_key_id,
            "private_key": req.body.private_key,
            "client_email": req.body.client_email,
            "client_id": req.body.client_id,
            "auth_uri": req.body.auth_uri,
            "token_uri": req.body.token_uri,
            "auth_provider_x509_cert_url": req.body.auth_provider_x509_cert_url,
            "client_x509_cert_url": req.body.client_x509_cert_url,
            "universe_domain": req.body.universe_domain
        }
    
        // if (payload?.length > 0) {
            try {
    
                // Initialize Firebase app if not already initialized

                let firebaseApp;
                const existingApps = getApps();
                const appExists = existingApps.some(app => app.name === req.body.project_id);
                
                if (!appExists) {
                    firebaseApp = initializeApp({
                        credential: cert(serviceAccountKey),
                    }, req.body.project_id);
                } else {
                    firebaseApp = getApp(req.body.project_id);
                }
                
                const messaging = getMessaging(firebaseApp);

            
                // Ensure all values in the 'data' field are strings
                if (payload.data) {
                    payload.data = Object.fromEntries(
                        Object.entries(payload.data).map(([key, value]) => [key, String(value)])
                    );
                }
                // console.log(payload.tokens, "<<------------- fcm payload");
    
                const response = await messaging.sendEachForMulticast(payload);
                console.log("Message sent successfully:", response);
    
                // Log individual response errors
                response.responses.forEach((resp, index) => {
                    if (!resp.success) {
                        console.error(`Error sending message to token ${payload.tokens[index]}:`, resp.error);
                    }
                });
            } catch (error) {
                console.error("Error sending push notification:", error);
            }
        // } else {
        //     console.error("No device tokens provided.");
        // }
        res.status(200).json({status: true, message: 'sent!'})

    } catch (error) {
        console.log('node error --->>', error);

    }
})

app.listen(PORT, () => console.log(`Server running port on ${PORT}`))
function myFunction() {
    const { google } = require('googleapis');

    const path = require('path');
    const fs = require('fs');

    const CLIENT_ID ="340748320970-khgr5r86mc2pk8jh8kk54qis0d4qe3gr.apps.googleusercontent.com";
    const CLIENT_SECRET = "_7bPDhZnPURhyCFAL55FEpMi";
    const REDIRECT_URI = 'https://developers.google.com/oauthplayground';

    const REFRESH_TOKEN = "1//04ae5IV_fnGRfCgYIARAAGAQSNwF-L9IrP0vIniwKlS87yk7J2IYmevu51neYQ0T59Ohh35sibtluL6CYaAJ0fjCMN4_L4ipCF_4";

    const oauth2Client = new google.auth.OAuth2(
        CLIENT_ID,
        CLIENT_SECRET,
        REDIRECT_URI
    );

     oauth2Client.setCredentials({ refresh_token: REFRESH_TOKEN });

     const drive = google.drive({
         version: 'v3',
         auth: oauth2Client,
     });
     const filePath = path.join(__dirname, 'intro.mp4');

     async function uploadFile() {
         try {
             const response = await drive.files.create({
                 requestBody: {
                     name: 'minecraft.mp4', //This can be name of your choice
                     mimeType: 'video/mp4',
                     parents: ['1BgxWnj0i8TRrYbLQXIjyN0otoLsyZ13R'],
                 },
                 media: {
                     mimeType: 'video/mp4',
                     body: fs.createReadStream(filePath),
                 },
             });

             console.log(response.data);
         } catch (error) {
             console.log(error.message);
         }
     }
     uploadFile()

    async function generatePublicUrl() {
        try {
            const fileId = '1ttMdRLiww-Z8ELb6J0dsLuCEsvKMZPhQ';
            await drive.permissions.create({
                fileId: fileId,
                requestBody: {
                    role: 'reader',
                    type: 'anyone',
                },
            });

            const result = await drive.files.get({
                fileId: fileId,
                fields: 'webViewLink, webContentLink',
            });
            console.log(result.data);
        } catch (error) {
            console.log(error.message);
        }
    }

    //generatePublicUrl();
}

myFunction();



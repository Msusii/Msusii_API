# Msusii_API

API for msusii Web Application.

### How To use?

1. For sending requests below is the JSON file for sending

   ```
   {
    "service": "GET_SALON",
    "msuko": "Service name of Customer"
   }
   ```

2. Below is _Response_

   ```
   {
   "code": 200,
   "status": "Success",
   "salons": [
   	{
    	"name": "REYSAM",
     	"phone_no": "255789764656",
     	"location": "KIJITONYAMA"
   	}
      ]
   }
   ```

3. For any Error below is response
   ```
   {
   "code": 404,
   "status": "Failed",
   "error": "No service Available" // For service Not Available
   }
   ```

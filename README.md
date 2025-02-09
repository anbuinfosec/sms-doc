# [ANONSMS](https://sms.anbuinfosec.xyz) 

## API Endpoint

```plaintext
https://sms.anbuinfosec.xyz/api/sms
```

## Parameters

| Parameter  | Type   | Required | Description                                                     |
|------------|--------|----------|-----------------------------------------------------------------|
| `apikey`   | String | Yes      | Your unique API key                                            |
| `mobile`   | String | Yes      | Recipient's phone number in the format `01XXXXXXXXX`           |
| `msg`      | String | Yes      | The message to send                                            |

### Example Request

```plaintext
https://sms.anbuinfosec.xyz/api/sms?apikey=YOUR_API_KEY&mobile=01XXXXXXXXX&msg=ANON%20SMS%20PANEL
```

## Code Examples

### cURL (Command Line)

```bash
curl -X GET "https://sms.anbuinfosec.xyz/api/sms?apikey=YOUR_API_KEY&mobile=01XXXXXXXXX&msg=ANON%20SMS%20PANEL"
```

### Python (requests)

```python
import requests

url = "https://sms.anbuinfosec.xyz/api/sms"
params = {
    "apikey": "YOUR_API_KEY",
    "mobile": "01XXXXXXXXX",
    "msg": "ANON SMS PANEL"
}

response = requests.get(url, params=params)
print(response.json())
```

### JavaScript (Node.js, axios)

```javascript
const axios = require("axios");

const url = "https://sms.anbuinfosec.xyz/api/sms";
const params = {
  apikey: "YOUR_API_KEY",
  mobile: "01XXXXXXXXX",
  msg: "ANON SMS PANEL",
};

axios.get(url, { params })
  .then(response => console.log(response.data))
  .catch(error => console.error("Error:", error));
```

### TypeScript (axios)

```typescript
import axios from "axios";

const url: string = "https://sms.anbuinfosec.xyz/api/sms";
const params = {
  apikey: "YOUR_API_KEY",
  mobile: "01XXXXXXXXX",
  msg: "ANON SMS PANEL",
};

axios.get(url, { params })
  .then(response => console.log(response.data))
  .catch(error => console.error("Error:", error));
```

### PHP (cURL)

```php
<?php
$apikey = "YOUR_API_KEY";
$mobile = "01XXXXXXXXX";
$msg = "ANON SMS PANEL";

$url = "https://sms.anbuinfosec.xyz/api/sms?apikey=$apikey&mobile=$mobile&msg=" . urlencode($msg);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>
```

### Java (HttpURLConnection)

```java
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class SendSms {
    public static void main(String[] args) {
        try {
            String apiKey = "YOUR_API_KEY";
            String mobile = "01XXXXXXXXX";
            String message = "ANON SMS PANEL";

            String urlString = "https://sms.anbuinfosec.xyz/api/sms?apikey=" + apiKey +
                               "&mobile=" + mobile + "&msg=" + java.net.URLEncoder.encode(message, "UTF-8");

            URL url = new URL(urlString);
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");

            BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
            String inputLine;
            StringBuffer content = new StringBuffer();
            while ((inputLine = in.readLine()) != null) {
                content.append(inputLine);
            }
            in.close();

            System.out.println(content.toString());
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}
```

### Go (net/http)

```go
package main

import (
	"fmt"
	"io/ioutil"
	"log"
	"net/http"
	"net/url"
)

func main() {
	apiKey := "YOUR_API_KEY"
	mobile := "01XXXXXXXXX"
	message := "ANON SMS PANEL"

	apiURL := "https://sms.anbuinfosec.xyz/api/sms"
	params := url.Values{}
	params.Add("apikey", apiKey)
	params.Add("mobile", mobile)
	params.Add("msg", message)

	reqURL := fmt.Sprintf("%s?%s", apiURL, params.Encode())
	resp, err := http.Get(reqURL)
	if err != nil {
		log.Fatalf("Error: %v", err)
	}
	defer resp.Body.Close()

	body, _ := ioutil.ReadAll(resp.Body)
	fmt.Println(string(body))
}
```

### Ruby (net/http)

```ruby
require 'net/http'
require 'uri'

uri = URI.parse("https://sms.anbuinfosec.xyz/api/sms")
params = {
  apikey: "YOUR_API_KEY",
  mobile: "01XXXXXXXXX",
  msg: "ANON SMS PANEL"
}
uri.query = URI.encode_www_form(params)

response = Net::HTTP.get_response(uri)
puts response.body
```

### Rust (reqwest)

```rust
use reqwest;
use std::collections::HashMap;

#[tokio::main]
async fn main() -> Result<(), reqwest::Error> {
    let client = reqwest::Client::new();
    let mut params = HashMap::new();
    params.insert("apikey", "YOUR_API_KEY");
    params.insert("mobile", "01XXXXXXXXX");
    params.insert("msg", "ANON SMS PANEL");

    let res = client.get("https://sms.anbuinfosec.xyz/api/sms")
        .query(&params)
        .send()
        .await?;

    println!("{}", res.text().await?);
    Ok(())
}
```

### C# (HttpClient)

```csharp
using System;
using System.Net.Http;
using System.Threading.Tasks;

class Program
{
    private static readonly HttpClient client = new HttpClient();

    static async Task Main()
    {
        string apiKey = "YOUR_API_KEY";
        string mobile = "01XXXXXXXXX";
        string msg = "ANON SMS PANEL";
        
        string url = $"https://sms.anbuinfosec.xyz/api/sms?apikey={apiKey}&mobile={mobile}&msg={Uri.EscapeDataString(msg)}";
        
        HttpResponseMessage response = await client.GetAsync(url);
        string result = await response.Content.ReadAsStringAsync();
        
        Console.WriteLine(result);
    }
}
```

### C++ (libcurl)

```cpp
#include <iostream>
#include <curl/curl.h>

int main() {
    CURL *curl;
    CURLcode res;

    std::string apiKey = "YOUR_API_KEY";
    std::string mobile = "01XXXXXXXXX";
    std::string msg = "ANON SMS PANEL";
    std::string url = "https://sms.anbuinfosec.xyz/api/sms?apikey=" + apiKey +
                      "&mobile=" + mobile + "&msg=" + curl_easy_escape(curl, msg.c_str(), msg.length());

    curl = curl_easy_init();
    if (curl) {
        curl_easy_setopt(curl, CURLOPT_URL, url.c_str());
        res = curl_easy_perform(curl);
        if (res != CURLE_OK) {
            fprintf(stderr, "curl_easy_perform() failed: %s\n", curl_easy_strerror(res));
        }
        curl_easy_cleanup(curl);
    }
    return 0;
}
```

### Kotlin (Ktor Client)

```kotlin
import io.ktor.client.*
import io.ktor.client.request.*
import io.ktor.client.statement.*

suspend fun main() {
    val client = HttpClient()
    val apiKey = "YOUR_API_KEY"
    val mobile = "01XXXXXXXXX"
    val msg = "ANON SMS PANEL"
    
    val response: HttpResponse = client.get("https://sms.anbuinfosec.xyz/api/sms") {
        parameter("apikey", apiKey)
        parameter("mobile", mobile)
        parameter("msg", msg)
    }
    
    println(response.readText())
    client.close()
}
```

### Vue.js (Axios)

```javascript
<template>
  <div>
    <button @click="sendSms">Send SMS</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  methods: {
    async sendSms() {
      try {
        const apiKey = "YOUR_API_KEY";
        const mobile = "01XXXXXXXXX";
        const msg = "ANON SMS PANEL";
        
        const response = await axios.get("https://sms.anbuinfosec.xyz/api/sms", {
          params: {
            apikey: apiKey,
            mobile: mobile,
            msg: msg
          }
        });
        
        console.log(response.data);
      } catch (error) {
        console.error("Error:", error);
      }
    }
  }
};
</script>
```

## Response Format

### Success Response

When the SMS is sent successfully, the API returns the following JSON response:

```json
{
    "success": true,
    "message": "Message sent successfully.",
    "mobile": "01XXXXXXXXX",
    "msg": "ANON SMS PANEL",
    "newBalance": 796,
    "ip": "XXX.XXX.XX.XXX"
}
```

#### Response Fields

| Field        | Type    | Description                                   |
|--------------|---------|-----------------------------------------------|
| `success`    | Boolean | Indicates whether the request was successful. |
| `message`    | String  | Provides a message about the request status.  |
| `mobile`     | String  | The mobile number to which the SMS was sent.  |
| `msg`        | String  | The content of the SMS message sent.          |
| `newBalance` | Integer | Your remaining SMS balance after the request. |
| `ip`         | String  | The IP address from which the request was made.|

### Error Responses

#### Invalid API Key

If the message sending fails for any reason, the API responds with:

```json
{
    "success": false,
    "message": "MESSAGE SEND FAILED"
}
```

If the API key is invalid, you’ll receive the following JSON response:

```json
{
    "success": false,
    "message": "User not found. Please enter a valid apikey."
}
```

#### Missing Parameters

If one or more required parameters (`apikey`, `mobile`, or `msg`) are missing, the response will be:

```json
{
    "success": false,
    "message": "Please provide mobile, message, and API key."
}
```

### General Error Response Format

All error responses from the API follow this structure:

| Field       | Type    | Description                                          |
|-------------|---------|------------------------------------------------------|
| `success`   | Boolean | Indicates whether the request was successful (`false` for errors). |
| `message`   | String  | Provides a message describing the error.             |

## Notes

- Replace `YOUR_API_KEY` and `01XXXXXXXXX` with your actual API key and recipient's phone number.
- Check your SMS balance and API key details to ensure uninterrupted service.
- For support or further inquiries, contact ANBU InfoSec support.

---

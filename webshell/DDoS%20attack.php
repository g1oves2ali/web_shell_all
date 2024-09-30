/*
 *
 *	This webshell's main purpose is to be used as a zobie during a DDoS attack.
 *	Allows for file uploads,
 *	allows for quick stopping of a ping based DoS (which presumably use files that will be deleted after the attack is stopped),
 *	commonucates on port 11 / UDP (I presume this allows on some unixes to list currently active users),
 *	builds a link to itself (I'm not sure why is that useful),
 *	allows for command execution on the host,
 *	it tries to hide itself by faking a 404 response from the server,
 *	it also allows to benchmark apache's performance.
 *
 */
 <!DOCTYPE HTML PUBLIC"-//IETF//DTDHTML 2.0//EN"><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL /DDoS attack.php was not found on this server </p><p>Additionally, a 404 Not Foun derror was encountered while trying to use an Error Document to handle the request</p></body ></html >
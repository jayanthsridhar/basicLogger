# basicLogger
A simple general purpose PHP logger

## Usage : 

1. Include file across your codebase. 
2. Edit the class file to define the logs folder, project name
3. Setup a new logger object
	$phpLogger = new phpLogger();
4. Log messages using a simple line of code
	$phpLogger->writeToLog("LogMessage");
5. Ensure you move the logs regularly to a non-web-accessible directory using cron

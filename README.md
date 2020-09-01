# Hashing
Your application will take an MD5 value like "81dc9bdb52d04dc20036dbd8313ed055" (the MD5 for the string "1234") and check all combinations of four-digit "PIN" numbers to see if any of those PINs produce the given hash.

You will present the user with a form where they can enter an MD5 string and request that you reverse-hash the string. If you can reverse hash the string, print out the PIN:

PIN: 1234

If the string does not reverse hash to a four digit number simply put out a message like:

PIN: Not found

You must check all four-digit combinations. You must have the value as a string not as an integer. For this shows the right and wrong way to check the has for "1234":

$check = hash('md5', '1234'); // Correct - hashing a string

$check = hash('md5', 1234); // Incorrect - hashing an integer

You should also print out the first 15 attempts to reverse-hash including both the MD5 value and PIN that you were testing. You should also print out the elapsed time for your computation as shown in the sample application.

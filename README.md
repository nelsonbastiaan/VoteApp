“Voting Page” read me

This application “Voting Page” allows a set list of students (names) to choose from a set list of fruit and vote on their chosen fruit : http://nelsonbastiaanvermeer.com/voting_app/http.html
The way to use this application is to simply select a name for the “Name” drop down list and then select a fruit for the “Fruit” drop down list. This will populate the input fields of both “Name” and “Fruit”. If this is not done a pop up window will prompt you to do so. The input fields can only be populated via the drop down list.
Then press the “Vote” button and the vote will be put through.
This will send a request to the “ItemAndStudent_Update.php” file which will query the database. The query response will be sent back to show the necessary update worked (“Vote successfully”).
A student can vote as many times as they want but only for one fruit at any one time. So if they have voted for an Apple and then they vote for a Banana then previous vote for the Apple will be reallocated to the Banana.
To see what each student voted for and the allocation of votes click the link at the bottom of the page: The votes for the fruit and who voted for which fruit
This brings you to a page of the voting summary for each student and the allocation of votes for the fruit in order of highest to lowest. To return to the “Voting Page” click the Go back to Voting Page.
This web pages and its associated files are on a Godaddy sever as well as the datebase “voting_app” and its 2 tables,  ItemListTable and Student_table.
ItemListTable contain 3 fields; Item, Votes and IndexNumber
Item	Votes	IndexNumber
Apple	0	1
Orange	1	2
Banana	1	3
Pineapple	2	4

Student_table contain 3 fields; StudentName, IndexNumber and ItemVote
StudentName	IndexNumber	ItemVote
Jane	1	Banana
John	2	Pineapple
Mike	3	Pineapple
Paul	4	Orange



# Exchange Portal built with Laravel

An exchange portal built with Laravel framework to provide users a platform to exchange their items and services online. Laravel 5.1.4 will be used for the development, further, Bootstrap 3.x and AngularJS 1.4.x will be used to build the frontend.

The project is still in active development stage and the features that will be implemented in the framework are as follows:

## Features

**User Registration:**
1. A user can register using other social networks such as Facebook, Twitter, and Google.
2. A verification email will be sent if a new user registers using email.
3. If the user registration is successful then the user will be redirected to login page and shown a Flash Message.
4. A token will be generated and an appropriate URL is generated which then is sent to the user's email.
5. If the user opens the URL then his/her account will be activated.
6. A user cannot login to an inactivated account.

**User Login:**
1. A user can login into his account using other popular social networking credentials.
2. If the user has an inactivated account (not clicked the link sent to the email) then he/she cannot login.
3. A user can use his phone number or email and password to login.
4. After a successful login, the user may be redirected to the intended page.

**User Profile/Home:**
1. A user has to add his interests after a successful login. This info will be used in suggesting appropriate items.
2. User home will be his profile which can be seen by different users.
3. He/She can edit his profile info directly by clicking the edit button in each section.

**Adding and Removing Items/Services:**
1. User has to add items to his account to start exchanging.
2. To add any item the user will have to fill up a form will all the details describing the item.
3. A user can also upload a photo of the item and provide other details about the item.
4. The user will have to choose whether or not he/she wants to show up his/her item in exchange suggestions.
5. The user will have to select the appropriate category and sub-category of the item before uploading it.
6. The user will also have to choose/mention the time period (can be permanent) he wants to exchange the item for.
7. Users can add appropriate tags to their items for proper indexing in the item suggestions.
8. After a successful addition of the item, he/she will be displayed a flash message.
9. A user can remove a certain item from his/her item list.

**Exchanging Items:**
1. A user will be suggested with items in accordance with users interests that he or she may be willing to exchange with.
2. A user can click on the little 'X' symbol on the top of the item suggestions to hide the item (for current session).
3. A user can view the history of the certain item by clicking 'View history' which will contain the entire journey of the item.
4. A user can also contact the item owner by clicking the contact button in the item suggestion.
5. If a user finds the interested item he may click 'Offer Exchange' button to offer an exchange to the item owner.
6. A user can choose the item(s) from his existing items that he/she has uploaded to offer an exchange.
7. If the item owner accepts the offer to exchange then both the participants will have a successful exchange.
8. After a successful exchange, both the participants will receive a notification via SMS with exchange details.
9. A disclaimer will be shown to the users describing their duty to contact each other for further exchange of goods or services in person.

**Messaging System:**
1. A user can send a message to any other user except for himself by clicking on message icon/button.
2. A message icon will be made available at a user's profile, under the item in suggestions and in the item's page.
3. Stickers and photos uploading are not available in conversations. (Can be modified in future)
4. Users can have a look at their conversations by navigating to the inbox.
5. Read and Unread messages are marked accordingly for the sake of user's sophistication.

**Search Mechanism:**
1. Users will have a facility to search or look for items with the help of filters.
2. A user can filter his/her search by location, category, name of the item/service and exchange time.
3. The search keywords will be stored as cookies to enhance future searches by giving appropriate suggestions.

**Wishlist Feature:**
1. If a user wants keep the item for future reference then he may add it to his wishlist.
2. Users wishlist will be kept private and an only user himself can view them.
3. If the item in the wishlist has been removed then he cannot view/access the item details anymore.
4. Even if the item is removed, the interested user can get the item's ex-owner, very before it was deleted.

**Blocking User System:**
1. Once a user is blocked by another user, he cannot message or view the items/profile of the blocker.
2. The blocker also cannot view the blockee's (user who is blocked) items/profile or message him.
3. A user can unblock a user that he has previously blocked by navigating to his settings page.

**Notification Mechanism:**
1. Users will receive a notification every time there is an activity related to them and will be marked unread till viewed.
2. There will be different types of notifications and hence different icons will be used in each type of notification.
3. A user will be notified with an 'item' icon when any activity is found on user's item. For e.g., when his/her item is added to wishlist.
4. Notifications related to items (notifications with 'item' icon) will be sent to a user via SMS if the user is not online.
5. A user will be able to find a notification with 'people' icon when somebody accepts an offer.
6. Requests and messages will be two other blocks where the corresponding notifications are shown to the users.

**User Feedback:**
1. Anyone can give a feedback by clicking on the feedback button/link.
2. A logged in user may not have to fill all the fields because they will be pre-filled.
3. Guest users (one who haven't signed in) have to fill all the required fields to submit a feedback.
4. A user will receive an automated response from the application, on behalf of the team.

**Report Spam:**
1. User's can report spam to the admin by clicking the 'Report' icon on the top of every item.
2. Admins can view the reports and remove the irrelevant content from the website.

**Personal Info Hiding (User's preference):**
1. Users can add their preference to hide or unhide their personal information such as their phone number, gender, email id and address.
2. Users contact information that is totally hidden, can only be accessed once the exchange is successful.
3. Once the exchange is successful the hidden information will be shared via SMS with the other item owner.

**Hiding Items Suggestions (User's preference):**
1. This service will hide the items in a particular user's search and will be reflected only in his/her search in accordance to their preference.
2. If a user doesn't wish to see an item in his search then he may hide it and that item will not be shown in his/her future searches.
3. If a item is hidden then it can be undone instantly by clicking 'undo'.
4. A hidden item, in a new session cannot unhide the item and therefore the user's preference cannot be changed.

**Email and SMS notification service:**
1. Every user has a preferences page where he/she can set the option to receive notifications via email.
2. If the user has activated the option to receive the notifications then all the notifications will be emailed to the user.
3. An SMS alert will be only used in certain cases when there is an exchange offer, successful exchange or merely important notification.
4. Password reset feature with SMS notification service is not available (but can be implemented in future updates).
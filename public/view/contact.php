<div class="content">
    <div>
        <br>
        <h1 style="margin-top:20px;">Page Contact</h1>
        <h3 style="margin-top:3%;">Envoyer un message</h3>
        <form style="margin-left:40%; margin-right:auto;" action="/ma-page-de-traitement" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="user_name">
            </div>
            <div>
                <label for="mail"><?php echo $data["contact"]["mail"]; ?></label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="msg"><?php echo $data["contact"]["message"]; ?></label>
                <textarea id="msg" name="user_message"></textarea>
            </div>
            <div class="button" style="margin-left:-30px; margin-bottom:50px;">
            <button type="submit">Envoyer le message</button>
            </div>
        </form>
    </div>
</div>

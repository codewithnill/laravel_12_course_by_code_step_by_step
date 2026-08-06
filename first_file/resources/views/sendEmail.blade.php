<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Add details for send email</h1>
    <form action="send_email" method="post">
        @csrf
        <input type="text" name="to" placeholder="Enter email address"><br><br>
        <input type="text" name="subject" placeholder="Enter email subject"><br><br>
        <textarea type="text" name="message" placeholder="Enter email message"></textarea><br><br>
        <button>Send Email</button>
    </form>
</div>

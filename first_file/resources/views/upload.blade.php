<div>
    <h2>Upload File</h2>

    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button type="submit">Upload</button>
    </form>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
</div>

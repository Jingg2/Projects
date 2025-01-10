<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Story</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <div class="header">
      <h2>Add Story Info</h2>
      <div class="actions">
        <button class="skip-btn" onclick="location.href='index.html';">Skip</button>
      </div>
    </div>
    <div class="form-container">
      <div class="cover-section">
        <div class="cover-placeholder">
          <img src="placeholder.png" alt="Add a cover" class="cover-image">
          <label for="cover_image" class="add-cover-btn">Add a cover</label>
          <input type="file" id="cover_image" name="cover_image" accept="image/*" style="display:block;">
        </div>
      </div>
      <div class="story-details">
        <form action="create-story.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" placeholder="Untitled Story" required>
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description" placeholder="Enter your story description" required></textarea>
          </div>
          <div class="form-group">
            <label for="category">Category</label>
            <select id="category" name="category" required>
              <option value="" disabled selected>Select a category</option>
              <option value="fiction">Fiction</option>
              <option value="fantasy">Fantasy</option>
              <option value="romance">Romance</option>
            </select>
          </div>
          <div class="form-group">
            <label for="language">Language</label>
            <select id="language" name="language" required>
              <option value="English">English</option>
              <option value="Spanish">Spanish</option>
            </select>
          </div>
          
          <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" id="rating" name="rating" placeholder="Enter a rating" required>
          </div>
          <div class="form-actions">
            <button type="submit" class="submit-btn">Save</button>
            <button type="button" class="cancel-btn" onclick="location.href='index.html';">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

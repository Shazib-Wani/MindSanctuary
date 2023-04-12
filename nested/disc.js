document.addEventListener(
    "click",
    function(event) {
      var target = event.target;
      var replyForm;
      if (target.matches("[data-toggle='reply-form']")) {
        replyForm = document.getElementById(target.getAttribute("data-target"));
        replyForm.classList.toggle("d-none");
      }
    },
    false
  );
  
  // Function to handle the submit button
  function handleCommentSubmit(event) {
    event.preventDefault();
    var commentInput = document.getElementById("comment-input");
    var comment = commentInput.value;
    addCommentToStorage(comment);
    renderComment(comment);
    commentInput.value = "";
  }
  
  // Function to add comment to storage
  function addCommentToStorage(comment) {
    var comments = localStorage.getItem("comments");
    if (!comments) {
      comments = [];
    } else {
      comments = JSON.parse(comments);
    }
    comments.push(comment);
    localStorage.setItem("comments", JSON.stringify(comments));
  }
  
  // Function to render the comment
  function renderComment(comment) {
    var commentsList = document.getElementById("comments-list");
    var commentListItem = document.createElement("li");
    commentListItem.textContent = comment;
    commentsList.appendChild(commentListItem);
  }
  
  // Add event listener to the submit button
  var commentForm = document.getElementById("comment-form");
  commentForm.addEventListener("submit", handleCommentSubmit);
  
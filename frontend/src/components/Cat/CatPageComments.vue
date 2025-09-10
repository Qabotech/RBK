<template>
    <div class="comments-section">
      <h2 class="comments-title text-[var(--accent-dark)] font-bold text-2xl mb-5">Comments</h2>
      <div class="comments-list overflow-scroll max-h-[30vh] style-1">
        <!-- Single Comment -->
        <div v-for="(comment, index) in comments" :key="index" class="comment mb-5 ">
          <div class="comment-header flex items-center gap-3 mb-2">
            <img
              :src="comment.userAvatar"
              alt="User Avatar"
              class="w-10 h-10 rounded-full object-cover"
            />
            <div class="comment-user-info">
              <p class="font-semibold text-[var(--primary-dark)]">{{ comment.userName }}</p>
              <p class="text-sm text-[var(--greyDark)]">{{ comment.date }}</p>
            </div>
          </div>
          <div class="comment-body">
            <p class="text-[var(--greyDark)]">{{ comment.text }}</p>
          </div>
        </div>
      </div>
      <!-- Add Comment Form -->
      <div class="add-comment mt-8">
        <textarea
          v-model="newComment"
          placeholder="Write your comment..."
          class="w-full p-3 border border-[var(--greyLight-2)] rounded-lg focus:outline-none focus:border-[var(--primary)]"
          rows="4"
        ></textarea>
        <button
          @click="addComment"
          class="mt-3 px-6 py-2 bg-[var(--primary)] text-white rounded-lg hover:bg-[var(--primary-dark)] transition-colors"
        >
          Submit
        </button>
      </div>
    </div>
  </template>

  <script>
  import { ref } from 'vue'

  export default {
    setup() {
      const comments = ref([
        {
          userName: 'John Doe',
          userAvatar: 'https://thispersondoesnotexist.com/',
          date: '2023-10-01',
          text: 'This is a great product! I highly recommend it.',
        },
        {
          userName: 'Jane Smith',
          userAvatar: 'https://thispersondoesnotexist.com/?c=1',
          date: '2023-10-05',
          text: 'Very satisfied with the quality and service.',
        },
      ])

      const newComment = ref('')

      const addComment = () => {
        if (newComment.value.trim()) {
          comments.value.push({
            userName: 'Current User', // Replace with dynamic user data if available
            userAvatar: 'https://thispersondoesnotexist.com/',
            date: new Date().toISOString().split('T')[0], // Current date in YYYY-MM-DD format
            text: newComment.value.trim(),
          })
          newComment.value = '' // Clear the input
        }
      }

      return {
        comments,
        newComment,
        addComment,
      }
    },
  }
  </script>

  <style scoped>
  .comments-section {
    margin-top: 2rem;
    padding: 1rem;
    background-color: var(--white);
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .comments-title {
    border-bottom: 2px solid var(--primary-light);
    padding-bottom: 0.5rem;
  }

  .comment {
    padding: 1rem;
    border-bottom: 1px solid var(--greyLight-2);
  }

  .comment:last-child {
    border-bottom: none;
  }

  .comment-header img {
    border: 2px solid var(--primary-light);
  }

  .add-comment textarea {
    resize: none;
  }

  .add-comment button {
    transition: background-color 0.3s ease;
  }
  .style-1{
    overflow-x:hidden !important;
  }
  .style-1::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px;
	background-color: var(--primary-light);
}

.style-1::-webkit-scrollbar
{
	width: 5px;
	background-color: #F5F5F5;
  display:block;
}

.style-1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: var(--greyDark);
}

  </style>

  <footer class="bg-dark dark:text-white mt-12">
      <div class="container mx-auto px-4 py-12">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
              <!-- About -->
              <div>
                  <h4 class="text-xl font-bold mb-4">About DevInsights</h4>
                  <p class="text-gray-700 mb-4">DevInsights is a leading web development blog providing in-depth
                      articles, tutorials, and insights on the latest technologies and best practices.</p>
                  <div class="flex space-x-4">
                      <a href="#" class="text-gray-700 hover:text-white">
                          <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="text-gray-700 hover:text-white">
                          <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="text-gray-700 hover:text-white">
                          <i class="fab fa-instagram"></i>
                      </a>
                      <a href="#" class="text-gray-700 hover:text-white">
                          <i class="fab fa-github"></i>
                      </a>
                  </div>
              </div>

              <!-- Quick Links -->
              <div>
                  <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                  <ul class="space-y-2">
                      <li><a href="#" class="text-gray-700 hover:text-white">Home</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">About Us</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">Contact</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">Privacy Policy</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">Terms of Service</a></li>
                  </ul>
              </div>

              <!-- Categories -->
              <div>
                  <h4 class="text-xl font-bold mb-4">Categories</h4>
                  <ul class="space-y-2">
                      <li><a href="#" class="text-gray-700 hover:text-white">Web Development</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">JavaScript</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">CSS & Design</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">Performance</a></li>
                      <li><a href="#" class="text-gray-700 hover:text-white">Accessibility</a></li>
                  </ul>
              </div>

              <!-- Contact -->
              <div>
                  <h4 class="text-xl font-bold mb-4">Contact Us</h4>
                  <ul class="space-y-2 text-gray-700">
                      <li class="flex items-start">
                          <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                          <span>123 Web Dev Street, San Francisco, CA 94107</span>
                      </li>
                      <li class="flex items-center">
                          <i class="fas fa-envelope mr-3"></i>
                          <span>contact@devinsights.com</span>
                      </li>
                      <li class="flex items-center">
                          <i class="fas fa-phone mr-3"></i>
                          <span>+1 (555) 123-4567</span>
                      </li>
                  </ul>
              </div>
          </div>

          <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-700">
              <p>&copy; 2025 DevInsights. All rights reserved.</p>
          </div>
      </div>
  </footer>

  <!-- Back to Top Button -->
  <button id="backToTop"
      class="fixed bottom-6 right-6 bg-primary hover:bg-primary/90 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg opacity-0 transition-opacity duration-300">
      <i class="fas fa-arrow-up"></i>
  </button>

  <script>
      // Back to Top Button
      const backToTopButton = document.getElementById('backToTop');

      window.addEventListener('scroll', () => {
          if (window.pageYOffset > 300) {
              backToTopButton.classList.remove('opacity-0');
              backToTopButton.classList.add('opacity-100');
          } else {
              backToTopButton.classList.remove('opacity-100');
              backToTopButton.classList.add('opacity-0');
          }
      });

      backToTopButton.addEventListener('click', () => {
          window.scrollTo({
              top: 0,
              behavior: 'smooth'
          });
      });
  </script>

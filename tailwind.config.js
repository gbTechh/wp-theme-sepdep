/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./header.php" , "./*.php"],
  theme: {
    extend: {
      colors: {
        'primary-blue': '#254971',
        'secondary-blue': '#1E426B',
        'primary-gold': '#C9A555'
      }
    },
  },
  plugins: [],
}


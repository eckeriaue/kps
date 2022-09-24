/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './**/*.{php,js}',
    './**/**/*.{php,js}',
    './**/**/**/*.{php,js}',
  ],
  theme: {
    extend: {
      spacing: {
        px: '1px',
        0: '0',
        0.5: '2px',
        1: '4px',
        2: '8px',
        3: '12px',
        4: '16px',
        6: '20px',
        8: '24px',
        10: '28px',
        12: '32px',
        14: '36px',
        16: '40px',
        20: '44px',
        24: '48px',
        28: '52px',
        32: '56px',
        36: '60px',
        40: '64px',
        44: '68px',
        48: '72px',
        52: '76px',
        56: '80px',
        60: '84px',
        64: '88px',
        72: '92px',
        80: '96px',
        96: '100px',
      },
  
      screens: {

        "2xl": { "max": "1920px" },
        "xl": { "max": "1140px" },
        "lg": { "max": "768px" },
        "md": { "max": "539px" },
        "sm": { "max": "360px" },
        "xm": { "max": "320px" },
      },
    },
  },
  plugins: [],
}
module.exports = {
  siteName: 'Chez Marcel',
  siteDescription: "Cazare în Sinaia, în vilă nouă cu camere duble şi suite de familie. Facilităţile includ bucătărie, living şi foişor comune, Wi-Fi, Netflix, Playstation 4.",
  siteUrl: 'https://www.chezmarcel.ro',
  titleTemplate: `%s`,
  icon: 'src/favicon.png',

  transformers: {
    remark: {
      externalLinksTarget: '_blank',
      externalLinksRel: ['nofollow', 'noopener', 'noreferrer'],
    }
  },

  plugins: [
    {
      use: '@gridsome/source-filesystem',
      options: {
        path: 'content/rooms/ro/**/*.md',
        typeName: 'Camera',
      }
    },
    {
      use: '@gridsome/source-filesystem',
      options: {
        path: 'content/rooms/en/**/*.md',
        typeName: 'Room',
      }
    },
    {
      use: '@gridsome/plugin-sitemap',
      options: {
        cacheTime: 600000,
      }
    },
  ],

  templates: {
    Camera: '/camere/:id',
    Room: '/en/rooms/:id',
  },

  chainWebpack: config => {
    config.module
      .rule('css')
      .oneOf('normal')
      .use('postcss-loader')
      .tap(options => {
        options.plugins.unshift(...[
          require('postcss-import'),
          require('postcss-nested'),
          require('tailwindcss'),
        ])

        return options
      })
  },
}

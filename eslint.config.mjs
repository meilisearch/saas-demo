import pluginVue from 'eslint-plugin-vue'

export default [
  ...pluginVue.configs['flat/recommended'],
  {
    rules: {
      // override/add rules settings here, such as:
      // 'vue/no-unused-vars': 'error'
    }
  }
]

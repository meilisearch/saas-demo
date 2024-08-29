/// <reference types="vite/client" />

interface ImportMeta {
  readonly env: ImportMetaEnv
}

interface ImportMetaEnv {
  readonly VITE_MEILISEARCH_HOST: string
  // Add other environment variables here if needed
}

import { readdirSync, statSync, existsSync } from 'node:fs'
import { join, extname } from 'node:path'
import { fileURLToPath } from 'node:url'
import sharp from 'sharp'

const root = fileURLToPath(new URL('../src/assets/images', import.meta.url))

function walk(dir) {
  const out = []
  for (const name of readdirSync(dir)) {
    const p = join(dir, name)
    if (statSync(p).isDirectory()) out.push(...walk(p))
    else out.push(p)
  }
  return out
}

const targets = walk(root).filter((p) => /\.(png|jpe?g)$/i.test(p))

let ok = 0
let fail = 0
let skipped = 0
for (const src of targets) {
  const dest = src.replace(/\.(png|jpe?g)$/i, '.webp')
  const isPng = /\.png$/i.test(src)
  // 既存の .webp は上書きしない（手動で用意した正規版を壊さないため）
  if (existsSync(dest)) {
    skipped++
    continue
  }
  try {
    await sharp(src)
      // PNG（ロゴ/アイコン/QR/透過）は品質高め、JPG（写真）は標準
      .webp({ quality: isPng ? 90 : 80, effort: 6 })
      .toFile(dest)
    ok++
  } catch (e) {
    fail++
    console.error('FAIL', src, e.message)
  }
}

console.log(`done: ${ok} converted, ${skipped} skipped (webp exists), ${fail} failed, ${targets.length} total`)

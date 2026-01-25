import React from 'react'

type Props = {
  name: string
  size?: number
  className?: string
}

export default function Icon({ name, size = 24, className }: Props) {
  return (
    <span
      className={`material-symbols-rounded ${className ?? ''}`}
      style={{ fontSize: `${size}px` }}
      aria-hidden="true"
    >
      {name}
    </span>
  )
}

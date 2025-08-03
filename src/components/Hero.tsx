import React from "react";
import { Image } from "./Image";

export default function Hero() {
    return (
        <section className="flex items-center gap-8 py-12">
            <div>
                <h1 className="text-5xl font-bold text-white">
                    Jesus Ordosgoitty
                </h1>
                <p className="text-gray-400 mt-2 text-lg">
                    Frontend Developer, Full Stack Engineer, and passionate
                    about software engineering.
                </p>
            </div>
            <Image
                src="/images/pic.jpg"
                alt="Jesus Ordosgoitty"
                className="rounded-full w-40 h-40 object-cover border-4 border-gray-700 shadow-lg"
            />
        </section>
    );
}

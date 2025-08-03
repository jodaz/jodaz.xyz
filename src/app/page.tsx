import Image from "next/image";
import Hero from "../components/Hero";
import WorkExperience from "../components/WorkExperience";

export const metadata = {
    title: "Jesus Ordosgoitty | Frontend Developer & Full Stack Engineer",
    description:
        "Jesus Ordosgoitty is a frontend developer, full stack engineer, and software engineer passionate about building modern web applications.",
};

export default function Home() {
    return (
        <main className="min-h-screen bg-[#18181b] px-6 sm:px-0 flex flex-col gap-16 items-center">
            <div className="max-w-4xl w-full mx-auto">
                <Hero />
                <WorkExperience />
            </div>
        </main>
    );
}

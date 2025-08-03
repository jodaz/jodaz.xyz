import React from "react";

const experiences = [
    {
        business_name: "Noriega Development",
        positions: [
            {
                years: "Apr. 2024 ― Current",
                title: "Freelance Full-Stack Developer",
            },
        ],
    },
    {
        business_name: "Stampfeet Ltd.",
        positions: [
            {
                years: "Sept. 2023 ― Current",
                title: "Frontend Developer",
            },
        ],
    },
    {
        business_name: "Alaxatech, Digital Agency",
        positions: [
            {
                years: "Oct. 2022 ― Jul. 2023",
                title: "Frontend Developer",
            },
            {
                years: "Jan. 2021 ― Jul. 2023",
                title: "FullStack Developer",
            },
        ],
    },
    {
        business_name: "Bermudez Municipality Government Office",
        positions: [
            {
                years: "Sep. 2019 ― Oct. 2022",
                title: "Developer and IT Support",
            },
            {
                years: "Nov. 2020 ― Nov. 2021",
                title: "Head of Web Development & Digital Marketing",
            },
        ],
    },
];

export default function WorkExperience() {
    return (
        <section className="py-12">
            <h2 className="text-3xl font-bold text-white mb-2">
                Work Experience
            </h2>
            <p className="text-gray-400 mb-6">
                All my professional experiences as a software engineer
            </p>
            <div className="flex flex-col gap-8">
                {experiences.map((exp, idx) => (
                    <div key={idx} className="flex gap-4 items-start">
                        <span className="mt-1 text-gray-400">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                strokeWidth={1.5}
                                stroke="currentColor"
                                className="w-6 h-6"
                            >
                                <path
                                    strokeLinecap="round"
                                    strokeLinejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118A7.5 7.5 0 0112 15.75a7.5 7.5 0 017.5 4.368M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                />
                            </svg>
                        </span>
                        <div>
                            <div className="font-semibold text-white">
                                {exp.business_name}
                            </div>
                            <div className="flex flex-col gap-1 mt-1">
                                {exp.positions.map((pos, pidx) => (
                                    <div key={pidx} className="ml-1">
                                        <div className="text-gray-300">
                                            {pos.title}
                                        </div>
                                        <div className="text-gray-400 text-sm">
                                            {pos.years}
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>
                ))}
            </div>
        </section>
    );
}

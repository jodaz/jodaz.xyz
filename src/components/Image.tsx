import * as React from "react";
import NextImage from "next/image";
// Removed MUI dependency
import { cloudinaryImageUrl } from "@/utils/cloudinary";
import {
    AdvancedImage,
    placeholder as cldPlaceholder,
    lazyload,
    responsive,
} from "@cloudinary/react";

interface ImageProps {
    height?: number;
    width?: number;
    className?: string;
    src: string;
    alt?: string;
    useNextImageInDevelopment?: boolean;
}

export const Image: React.FC<ImageProps> = ({
    height = 200,
    width = 200,
    className = "",
    src,
    alt = "image",
    useNextImageInDevelopment,
}) => {
    const shouldRenderNextImage =
        process.env.NODE_ENV === "development" ||
        Boolean(useNextImageInDevelopment);

    const plugins = React.useMemo(() => {
        if (shouldRenderNextImage) return [];

        const plugins = [];
        plugins.push(
            lazyload({ rootMargin: "10px 20px 10px 30px", threshold: 0.1 })
        );
        plugins.push(responsive({ steps: [600, 800, 1000, 1400] }));
        plugins.push(cldPlaceholder({ mode: "blur" }));
        return plugins;
    }, [shouldRenderNextImage]);

    if (shouldRenderNextImage) {
        return (
            <NextImage
                src={src}
                alt={alt}
                width={width}
                height={height}
                className={className}
                style={{ objectFit: "cover" }}
            />
        );
    }

    return (
        <AdvancedImage
            src={src}
            plugins={plugins}
            cldImg={cloudinaryImageUrl(src)}
            className={className}
            style={{ height, width, objectFit: "cover" }}
            alt={alt}
        />
    );
};
